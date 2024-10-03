

<?php 
$saluto = "ciao"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- form -->
     <main class="container">
        <section class="row">
            <div class="col-12">
                <h1></h1>
                <form action="./datareceived.php" method="GET">
                    <div class="mb-3">
                         <label for="Paragrafo" class="form-label">Iserisci il tuo paragrafo</label>
                        <textarea class="form-control" id="paragrafo" name="paragrafo" placeholder="Inserisci il tuo paragrafo" rows="3"></textarea>  
                    </div>                
                    <div class="mb-3">
                        <label for="parola-censurata" class="form-label">Scegli una parola da nascondere</label>
                        <input type="text" class="form-control" id="parolaCensurata" name="parolaCensurata" placeholder="Inserisci la parola da nascondere">
                    </div>  
                    
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
<div class=""></div>
                </form>
               
            </div>
        </section>
     </main>
    
</body>
</html>