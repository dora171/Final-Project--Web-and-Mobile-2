<footer>

    <div class="row" id="footer">
        <div class="col-6">

            <p>Copyright &copy; <?php echo @date("Y"); ?> Dora Tomljenovic</p>
        </div>
        <div class="col-6">

            <div id="footer-links">   
                <a href="references.php">References</a>
                <a href="rubric.php">Rubric</a>
            </div>
        </div>

    </div>
</footer>

<?php
if ($pageName == 'Venice') {

    echo '</div>';
}
?>


<script src="js/nav.js"></script>
<script src="js/titleJS.js" type="text/javascript"></script>
<?php
if ($pageName == 'Map') {

    echo '<script src="js/slideMap.js"></script>';
} if ($pageName == 'Gallery') {

    echo '<script src="js/slideGallery.js"></script>';
}
?>

</body>
</html>




