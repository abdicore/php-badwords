

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
    <?php echo $saluto?>
    <!-- form -->
     <main class="container">
        <section class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Iserisci il tuo paragrafo</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Inserisci la parola da nascondere</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                </div>
        </section>
     </main>
    
</body>
</html>