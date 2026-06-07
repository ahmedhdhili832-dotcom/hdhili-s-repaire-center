<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Hdhili Tech</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI,sans-serif;
}

body{
background:#0f172a;
color:white;
display:flex;
}

.sidebar{
width:250px;
height:100vh;
background:#020617;
padding:20px;
position:fixed;
}

.sidebar h2{
color:#38bdf8;
margin-bottom:30px;
}

.sidebar ul{
list-style:none;
}

.sidebar ul li{
padding:15px 10px;
margin:10px 0;
background:#1e293b;
border-radius:10px;
cursor:pointer;
}

.main{
margin-left:270px;
padding:30px;
width:100%;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:20px;
margin-top:20px;
}

.card{
background:#1e293b;
padding:25px;
border-radius:15px;
}

.card h3{
color:#38bdf8;
margin-bottom:10px;
}

.table{
margin-top:30px;
background:#1e293b;
padding:20px;
border-radius:15px;
overflow-x:auto;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
padding:12px;
text-align:left;
border-bottom:1px solid #334155;
}

th{
color:#38bdf8;
}
</style>
</head>

<body>

<div class="sidebar">
<h2>Hdhili Tech</h2>

<ul>
<li>🏠 Dashboard</li>
<li>📱 Réparations</li>
<li>👥 Clients</li>
<li>💰 Revenus</li>
<li>⚙️ Paramètres</li>
</ul>
</div>

<div class="main">

<h1>Dashboard</h1>

<div class="cards">

<div class="card">
<h3>Clients</h3>
<h2>124</h2>
</div>

<div class="card">
<h3>Réparations</h3>
<h2>356</h2>
</div>

<div class="card">
<h3>Revenus</h3>
<h2>12,500 DT</h2>
</div>

<div class="card">
<h3>En attente</h3>
<h2>18</h2>
</div>

</div>

<div class="table">

<h2>Dernières Réparations</h2>

<table>
<tr>
<th>Client</th>
<th>Appareil</th>
<th>État</th>
</tr>

<tr>
<td>Ahmed</td>
<td>iPhone 13</td>
<td>Terminé</td>
</tr>

<tr>
<td>Mohamed</td>
<td>Dell Laptop</td>
<td>En cours</td>
</tr>

<tr>
<td>Ali</td>
<td>Samsung S22</td>
<td>En attente</td>
</tr>

</table>

</div>

</div>

</body>
</html>
