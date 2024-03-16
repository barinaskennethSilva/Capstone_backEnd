<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other head elements -->
    <script src="{{ asset('js/socket.js') }}"></script>
</head>
<body>
   <div id="chatbox">
    <ul id="messages"></ul>
    <form action="">
        <input id="m" autocomplete="off" /><button>Send</button>
    </form>
</div>

<script>
    window.echo.channel('chatbox')
        .listen('ChatMessage', (data) => {
            $('#messages').append($('<li>').text(data.message));
        });

    $('form').submit(function() {
        window.echo.emit('message', $('#m').val());
        $('#m').val('');
        return false;
    });
</script>

</body>
</html>
