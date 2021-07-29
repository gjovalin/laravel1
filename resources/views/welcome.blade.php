
<html>
<body bgcolor="#d3d3d3">
<center><h1>LIBRARIA</h1></center>
<form action="submit" method="post">
@csrf
    <table border = 1>
        <tr bgcolor="#f0e68c">
            <td>
                <h4>Autori</h4>
            </td>
            <td>
                <h4> Titulli i librit</h4>
            </td>
            <td>
                <h4> Viti i botimit</h4>
            </td>
            <td>
                <h4>Sasia</h4>
            </td>
            <td>
                <h4>Cmimi</h4>
            </td>
            <td>
                <h4>Vendodhja</h4>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" placeholder="Autori" name="autori">
            </td>
            <td>
                <input type="text" placeholder="Titulli i librit" name="titulli_librit">
            </td>
            <td>
                <input type="year" placeholder="Viti i botimit" name="viti_botimit">
            </td>
            <td>
                <input type="number" placeholder="Sasia" name="sasia">
            </td>
            <td>
                <input type="price" placeholder="cmimi" name="cmimi">
            </td>
            <td>
                <input type="text" placeholder="vendodhja" name="vendodhja" >
            </td>

        </tr>
    </table>

    <br>
    <container>
{{--        <input type="submit" value ="Kerko" name="kerko">--}}
        <button type="submit" >Shto</button>
{{--        <input type="submit" value ="Fshij" name="fshij">--}}
    </container>
    <br>

</form>
</body>
</html>



