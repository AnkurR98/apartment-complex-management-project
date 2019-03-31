<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form method="post">
                            <p>Input the apartment the resident wishes to shift to. Note that it may/may not be available.</p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Block Number</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="Block">
                                        <option value="A-1">A1</option>
                                        <option value="A-2">A2</option>
                                        <option value="A-3">A3</option>
                                        <option value="B-1">B1</option>
                                        <option value="B-2">B2</option>
                                        <option value="B-3">B3</option>
                                        <option value="C-1">C1</option>
                                        <option value="C-2">C2</option>
                                        <option value="C-3">C3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Apartment Number</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="AptNum">
                                        <option value="001">001</option>
                                        <option value="002">002</option>
                                        <option value="003">003</option>
                                        <option value="101">101</option>
                                        <option value="102">102</option>
                                        <option value="103">103</option>
                                        <option value="201">201</option>
                                        <option value="202">202</option>
                                        <option value="203">203</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="Toggler" value="Shift">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" style="margin-left:30px;" class="btn btn-primary">Do It!</button>
                    </div>
                    </form>


</body>
</html>