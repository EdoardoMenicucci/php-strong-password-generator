<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>form hotel</title>
</head>

<body>
    <!-- FORM PER FILTRARE GLI HOTEL CON IL PARCHEGGIO -->
    <div class="container">
        <div class="form-container">
            <h1>Strong Password Generator</h1>
            <form action="generator.php" method="GET">
                <div class="form-group">
                    <label for="charnumber">Numero caratteri:</label>
                    <input type="number" name="charnumber" id="charnumber">
                    <!-- <label for="rating">Voto sufficente:</label> -->
                    <!-- <select name="rating" id="rating">
                        <option value="true">SI</option>
                        <option value="false">NO</option>
                    </select> -->
                </div>
                <div class="form-group">
                    <button type="submit">Vai!</button>
                </div>
                <!-- <div class="form-group">
                    <input type="checkbox" name="noFilters" id="noFilters">
                    <label for="noFilters">No Filters</label>
                </div> -->
            </form>
        </div>
    </div>
</body>

</html>