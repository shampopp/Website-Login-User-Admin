<html>
<head>
    <title>Login System</title>
</head>
<body>
    <h2>Login Role</h2>
    <form method="post" action="process_login.php">
        <label>Pilih role: </label><br>
        <select name="role" required>
            <option value="">--Pilih--</option>
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
        </select>
        <br><br>
        <input type="submit" value="Masuk">
    </form>
</body>
</html>
