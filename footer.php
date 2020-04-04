<footer>

</footer>
<?php foreach($response['assets']['js'] as $js): ?>
    <script src="<?php echo  $jsPath . $js; ?>"></script>
<?php endforeach; ?>
</body>
</html>