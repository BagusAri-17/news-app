import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';

// let saveBtn = document.getElementById('save-data');


const editor = new EditorJS({
    /**
     * Id of Element that should contain Editor instance
     */
    holder: 'editorjs',
    tools: {
        header: {
            class: Header,
            inlineToolbar: ['list']
        },
    },
});

// if (saveBtn) {
//     saveBtn.addEventListener('click', (e) => {
//         e.preventDefault();

//         let btnTarget = e.target;
//         const url = btnTarget.getAttribute('button');

//     })
// }