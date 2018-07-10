(function(){
    var frame    =     wp.media({
        title: 'Select or upload image',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });

    $("#de_uploadLogoImgBtn").on('click', function(e){
        e.preventDefault();
        frame.open();
    });
console.log(frame);
    frame.on('select', function () {
        var attachment   =   frame.state().get('selection').first().toJSON();
        console.log(attachment);

        $("[name='de_inputLogoImg']").v;
        console.log($("[name='de_inputLogoImg']").val());
        
    });

})();