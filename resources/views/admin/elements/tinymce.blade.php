<script>
    tinymce.init({
        selector: 'textarea#content',
        width: "100%",
        height: 800,
        plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
        ],
        toolbar: 'styles | bold italic underline| alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist | link image',

        menu: {
            favs: { items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'file edit view insert format table',
        content_style: 'img {max-width: 100%;}',

        file_picker_callback: function (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            let type = 'image' === meta.filetype ? 'Images' : 'Files',
                url  = '/laravel-filemanager?editor=tinymce5&type=' + type;

            tinymce.activeEditor.windowManager.openUrl({
                url : url,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    });

    tinymce.init({
        selector: 'textarea#images',
        width: "100%",
        height: 800,
        plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
        ],
        toolbar: 'styles | bold italic underline| alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist | link image',

        menu: {
            favs: { items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'file edit view insert format table',
        content_style: 'img {max-width: 100%;}',

        file_picker_callback: function (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            let type = 'image' === meta.filetype ? 'Images' : 'Files',
                url  = '/laravel-filemanager?editor=tinymce5&type=' + type;

            tinymce.activeEditor.windowManager.openUrl({
                url : url,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    });
</script>
