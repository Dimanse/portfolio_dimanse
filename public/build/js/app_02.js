Dropzone.autoDiscover=!1;var myDropzone=new Dropzone("#dropzone",{url:"ImagenController.php",method:"POST",paramName:"file",autoProcessQueue:!1,acceptedFiles:".png, .jpg, .jpeg, .gif",maxFiles:1,uploadMultiple:!1,dictRemoveFileConfirmation:"¿Estas seguro?",dictInvalidFileType:"Tipo de archivo no aceptado",dictCancelUpload:"Cancelar",dictRemoveFile:"Eliminar",dictDefaultMessage:"Sube aquí tu imagen"});myDropzone.on("addedfile",(function(e){})),myDropzone.on("removedfile",(function(e){})),myDropzone.on("sending",(function(e,o,n){n.append("dropzone","1")})),myDropzone.on("error",(function(e,o){console.log(o)})),myDropzone.on("successmultiple",(function(e,o){console.log(o),document.getElementById("dropzone-form").submit()}));var images=[{name:"image_1.jpg",url:"example/image1.jpg",size:"12345"},{name:"image_2.jpg",url:"example/image2.jpg",size:"12345"},{name:"image_2.jpg",url:"example/image2.jpg",size:"12345"}];for(let e=0;e<images.length;e++){let o=images[e];var mockFile={name:o.name,size:o.size,url:o.url};myDropzone.emit("addedfile",mockFile),myDropzone.emit("thumbnail",mockFile,o.url),myDropzone.emit("complete",mockFile);var existingFileCount=1;myDropzone.options.maxFiles=myDropzone.options.maxFiles-existingFileCount}var submitDropzone=document.getElementById("submit-dropzone");submitDropzone.addEventListener("click",(function(e){e.preventDefault(),e.stopPropagation(),""!=myDropzone.files?myDropzone.processQueue():document.getElementById("dropzone-form").submit()}));