$(document).ready(function(){
    $('#files').change(function(){
        arquivos = $(this);
        $('#img-pack').empty();
        for(i = 0; i < arquivos[0].files.length; i++){
            arquivo = arquivos[0].files[i];
            showThumbnail(arquivo);
        }
    });
});

function showThumbnail(file) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#img-pack').append('<div class="dvImgP"><img src="'+e.target.result+'" class="imgp" id="imgp-'+i+'" /><div class="btn btn-danger btn-sm sairDvImg" id="'+i+'">x</div></div>');
    }

    reader.readAsDataURL(file);
}

function removeThumbnail(id){

}