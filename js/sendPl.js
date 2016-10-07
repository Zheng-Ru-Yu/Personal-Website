define(['jquery'], function ($) {
    $(function () {
        $btn = $('#btn-send');
        $btn.on('click', function () {
            var $name = $('.name');
            var $email = $('.email');
            var $content = $('#content');
            var now = new Date();
            $.post("pl/comment", {
                name: $name.val(),
                email: $email.val(),
                content: $content.val(),
            }, function (data) {
                if (data == 'success') {
                    var html = ` <div class="row">
                                    <div><p id="message">` + $content.val() + `</p></div>
                                    <br>
                                    <br>
                                    <br>
                                    <div id="writter">
                                        <span>` + $name.val() + `</span>&nbsp发表于<span> ` + now.toLocaleDateString() + `</span>
                                    </div>

                                </div>
                                <hr>`;
                    $('#send-container .clear').val('');
                    $('#comment .content').eq(0).prepend(html);

                } else {
                    alert('评论失败！')
                }

            }, 'text');


        });
    });


});