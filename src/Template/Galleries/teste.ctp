<!DOCTYPE html>

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body   >

<img style="margin-top:100px" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="smiley.gif" id="gif" alt="Smiley" width="32" height="32">

<p>The function bigImg() is triggered when the user moves the mouse pointer over the image.</p>
<p>The function normalImg() is triggered when the mouse pointer is moved out of the image.</p>
<div class="container">
    <h2>Modal Example</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
<style>
    #myModal{
        margin-top: 10px;
    }
</style>

<script>
    function bigImg(x) {
        $("#myModal").modal('show');
        document.getElementById("gif").style.position = "fixed";
        document.getElementById("gif").style.zIndex = "9999999";
        document.getElementById("myModal").style.position = "fixed";


    }

    function normalImg(x) {
        $("#myModal").modal('hide');
    }
</script>

</body>
</html>


