
    // Dropzone.autodiscover = false;
    
    // const dropzone = new Dropzone('#dropzone', {
    //     dictDefaultMessage: 'Sube aquí tu imagen',
    //     acceptedFiles: '.png, .jpg, .jpeg, .gif',
    //     addRemoveLinks: true,
    //     dictRemoveFile: 'Borrar archivo',
    //     maxFiles: 1,
    //     uploadMultiple: false,
    // })

    Dropzone.autoDiscover = false;

var myDropzone = new Dropzone("#dropzone", {
    url: "ImagenController.php",
    method: "POST",
    paramName: "file",
    autoProcessQueue : false,
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    maxFiles: 1,
    uploadMultiple: false,
    dictRemoveFileConfirmation: "¿Estas seguro?", // ask before removing file
    // Language Strings
    dictInvalidFileType: "Tipo de archivo no aceptado",
    dictCancelUpload: "Cancelar",
    dictRemoveFile: "Eliminar",
    dictDefaultMessage: 'Sube aquí tu imagen',
});

myDropzone.on("addedfile", function(file) {
    //console.log(file);
});

myDropzone.on("removedfile", function(file) {
    // console.log(file);
});

// Add mmore data to send along with the file as POST data. (optional)
myDropzone.on("sending", function(file, xhr, formData) {
    formData.append("dropzone", "1"); // $_POST["dropzone"]
});

myDropzone.on("error", function(file, response) {
    console.log(response);
});

// on success
myDropzone.on("successmultiple", function(file, response) {
    // get response from successful ajax request
    console.log(response);
    // submit the form after images upload
    // (if u want yo submit rest of the inputs in the form)
    document.getElementById("dropzone-form").submit();
});


/**
 *  Add existing images to the dropzone
 *  @var images
 *
 */
 
var images = [
	{name:"image_1.jpg", url: "example/image1.jpg", size: "12345"},
	{name:"image_2.jpg", url: "example/image2.jpg", size: "12345"},
	{name:"image_2.jpg", url: "example/image2.jpg", size: "12345"},
] 

for(let i = 0; i < images.length; i++) {

    let img = images[i];
    //console.log(img.url);

    // Create the mock file:
    var mockFile = {name: img.name, size: img.size, url: img.url};
    // Call the default addedfile event handler
    myDropzone.emit("addedfile", mockFile);
    // And optionally show the thumbnail of the file:
    myDropzone.emit("thumbnail", mockFile, img.url);
    // Make sure that there is no progress bar, etc...
    myDropzone.emit("complete", mockFile);
    // If you use the maxFiles option, make sure you adjust it to the
    // correct amount:
    var existingFileCount = 1; // The number of files already uploaded
    myDropzone.options.maxFiles = myDropzone.options.maxFiles - existingFileCount;

}

// button trigger for processingQueue
var submitDropzone = document.getElementById("submit-dropzone");
submitDropzone.addEventListener("click", function(e) {
    // Make sure that the form isn't actually being sent.
    e.preventDefault();
    e.stopPropagation();

    if (myDropzone.files != "") {
        // console.log(myDropzone.files);
        myDropzone.processQueue();
    } else {
	// if no file submit the form    
        document.getElementById("dropzone-form").submit();
    }

});