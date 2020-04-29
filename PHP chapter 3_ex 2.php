Kirjoita PHP-skripti, joka tulostaa alla olevaan lomakkeeseen annetut tiedot esimerkkitulostuksen mukaisesti.

<form action="tulostanimi.php" method="get">
Etunimi: <input type="text" name="enimi"><br>
Sukunimi: <input type="text" name="snimi">
<input type="submit" value="Lähetä">
</form>

Nimesi on <?php echo $_GET["enimi"]; ?>
<?php echo $_GET["snimi"]; ?>