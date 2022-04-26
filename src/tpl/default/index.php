<!DOCTYPE html>
<html lang="{$options['lang'] ?? 'zh-CN'}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title ?: '表单'}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.x/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.x/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.x/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .form-label {
            font-weight: bold;
            color: #666;
        }
    </style>
</head>

<body>
    <form action="{$action?:''}" method="{$method?:'POST'}" enctype="{$options['enctype']??'application/x-www-form-urlencoded'}" id="form">
        <div class="mb-2 sticky-top bg-light border-bottom">
            <div class="container">
                <div class="py-2 fs-3 fw-bold">{$title?:'表单'}</div>
            </div>
        </div>
        <div class="container" style="padding-bottom:100px;">
            {echo $body}
        </div>
        <div class="bg-light bg-gradient fixed-bottom border-top">
            <div class="container">
                <div class="py-3">
                    <button type="submit" class="btn btn-primary btn-lg px-4">{$options['submit'] ?? '提交'}</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(function() {
            $("#form").bind('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    dataType: "JSON",
                    success: function(response) {
                        alert(response.message);
                        if (response.code == 0) {
                            window.history.go(-1);
                        }
                    },
                    error: function(response, b, c) {
                        alert("[" + response.status + "] " + response.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>