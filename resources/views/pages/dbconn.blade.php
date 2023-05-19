<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & MySQL DB Connection</title>
</head>
<body>
    <div>
        <?php 
        use Illuminate\Support\Facades\DB;
            if(DB::connection() -> getPDO()){
                echo "Successfullty Connected to DB and DB Name is". DB::connection() -> getDatabaseName();
            }
        ?>
    </div>
</body>
</html>