import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { Autoformat } from "@ckeditor/ckeditor5-premium-features";

ClassicEditor.builtinPlugins.push(Autoformat);

document.addEventListener("DOMContentLoaded", function () {
    const editors = document.querySelectorAll(".ckeditor");
    editors.forEach((editorElement) => {
        ClassicEditor.create(editorElement).catch((error) => {
            console.error(error);
        });
    });
});
