<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Feedback Form</title>
</head>
<body>
    <div class="container mt-4 shadow-lg">
        <div class="row">
            <div class="col-md-3"></div>
                <h2 class="text-white">Feedback Form</h2>
                <p class="text-white">We welcome your comments and suggestion!</p>
                <hr>
                <form>
                    <div class="text-white">
                        <h5>What kind of comment would you like to send?</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="feedback" id="feed1" class= "pointer" value="suggestion">&nbsp;&nbsp;<label for="feed1" >Suggestion</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="feedback" id="feed2" class="pointer" value="complaint">&nbsp;&nbsp;<label for="feed2">Complaint</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="feedback" id="feed3" class= "pointer" value="problem">&nbsp;&nbsp;<label for="feed3">Problem</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="feedback" id="feed4" class="pointer" value="praise">&nbsp;&nbsp;<label for="feed4">Praise</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3 text-white">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your full name." required="">
                    </div>
                    <div class="mb-3 text-white">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your e-mail address. " required="">
                    </div>
                    <div class="form-group mb-2 text-white">
                        <label class="form-label">Describe Feedback:</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required=""></textarea>
                        <label for="floatingTextarea">Comment</label>
                    </div>
                    
                    <div class="col-auto button">
                        <button type="submit" class='btn btn-primary'>Submit</button>
                    </div> 
                </form>
        </div>
    </div>
    
</body>
</html>