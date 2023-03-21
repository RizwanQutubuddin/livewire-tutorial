
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Livewire tutorial</title>
        @livewireStyles
       
    </head>
    <body>
        
        {{$slot}}
        @livewireScripts
        <script>
            window.livewire.on('studentAdded',()=>{
                $('#addStudentModal').modal('hide');
            });
            window.livewire.on('studentupdated',()=>{
                $('#updateStudentModal').modal('show');
            });
        </script>
    </body>
</html>
