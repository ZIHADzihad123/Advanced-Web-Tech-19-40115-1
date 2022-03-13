<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="card col-lg-6 mt-5 ">
            <div class="card-body ">

                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$student->name}}">

                    </div>

                    <div class="mb-3">
                        <label for="Email1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{$student->email}}">

                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">date of birth</label>
                        <input type="text" class="form-control" name="dob" value="{{$student->dob}}">

                    </div>


                    <button type="Update" class="btn btn-primary ">Submit</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>