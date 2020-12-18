var videoId = 'video';
var scaleFactor = 0.25;
var snapshots = [];
var comments = [];
var imagesBase64 = [];

/**
 * Captures a image frame from the provided video element.
 *
 * @param {Video} video HTML5 video element from where the image frame will be captured.
 * @param {Number} scaleFactor Factor to scale the canvas element that will be return. This is an optional parameter.
 *
 * @return {Canvas}
 */
function capture(video, scaleFactor) {
    if (scaleFactor == null) {
        scaleFactor = 1;
    }
    var w = video.videoWidth * scaleFactor;
    var h = video.videoHeight * scaleFactor;
    var canvas = document.createElement('canvas');
    canvas.width = w;
    canvas.height = h;
    var ctx = canvas.getContext('2d');
    var dataURL = canvas.toDataURL('image/jpg');
    imagesBase64.push(dataURL);
    // console.log(ctx)
    ctx.drawImage(video, 0, 0, w, h);
    return canvas;
}

/**
 * Invokes the <code>capture</code> function and attaches the canvas element to the DOM.
 */
function shoot() {
    $('#modal1').modal('open');

    var video = document.getElementById(videoId);
    var output = document.getElementById('output');
    var canvas = capture(video, scaleFactor);

    console.log(canvas[0]);
    console.log(canvas);
    canvas.onclick = function() {

        var img = new Image();
        img.crossOrigin = 'anonymous';

        var ctx = this.getContext('2d');

    };
    snapshots.unshift(canvas);
    output.innerHTML = '';
    for (var i = 0; i < 20; i++) {
        output.appendChild(snapshots[i]);
    }
}

(function() {
    var captureit = document.getElementById('cit');
    captureit.click();

    $('.btn-confirm-comment').on('click', function (){
        comments.push($('#comment').val());
    });

    $('#send-report').on('submit', function (e){
        e.preventDefault();
        var baseurl = window.location.origin;

        $.ajax({
            type: "POST",
            url: baseurl+"/reports/post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                title: $('#title').val(),
                images:imagesBase64,
                comments:comments
                },
            dataType: "JSON",
            success: function (response) {
                alert('relatorio cadastrado com suceoss!');
                document.location.reload(true);
            }
        });
    })
})();
