fetch(`http://127.0.0.1:8000/api/exercise`)
  .then(function (response) {
    return response.json();
  })
  .then(function (users) {
    let placeholder = document.querySelector("#data-output");
    let out = "";
    for (let user of users) {
      out += `
			<tr>
				<td>${user.id}</td>
				<td>${user.name}</td>
				<td>${user.score}</td>
			<td>
		<button onClick=getSingleRow(${user.id})>View</button>
			<button onClick=updateRow(${user.id})>Update</button>
			<button onClick=tableRowDelete(${user.id})>Delete</button></td>
			
			</tr>
		`;
    }

    return (placeholder.innerHTML = out);
  });

fetch(`http://127.0.0.1:8000/api/exercise`)
  .then(function (response) {
    return response.json();
  })
  .then(function (users) {
    let placeholder = document.querySelector("#leaderboard");
    let out = "";
    for (let user of users) {
      out += `
			<tr>
				<td>${user.id}</td>
				<td>${user.name}</td>
				<td>${user.score >= 80}</td>
			<td>
		<button onClick=getSingleRow(${user.id})>View</button>
			<button onClick=updateRow(${user.id})>Update</button>
			<button onClick=tableRowDelete(${user.id})>Delete</button></td>
			
			</tr>
		`;
    }

    return (placeholder.innerHTML = out);
  });

fetch("http://127.0.0.1:8000/api/exercise", {
  method: "POST",
  headers: {
    "Content-type": "application/json",
  },
  body: JSON.stringify({
    name: "Goran",
    score: "50",
  }),
})
  .then((res) => res.json())
  .then((data) => console.log(data));
