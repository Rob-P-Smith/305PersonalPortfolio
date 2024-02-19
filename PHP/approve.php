<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Rob\'s Approval Page</title>
</head>
    <body>
        <form id="thisValue" method="POST" action="./control.php" hx-boost="true">
            <label for="code-input" class="col-form-label" style="color: white;">Authorization Code</label>
                <input type="text" class="form-control formFieldStyles" id="code-input" name="code-input" required>
                    <button type="submit"
                    name="actionTrigger"
                    hx-post="./control.php"
                    value="approve"
                    > 
                    Approve Message 
                    </button>

        </form>
    </body>
