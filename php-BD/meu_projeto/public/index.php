<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Tarefas</title>
</head>

<body>
    <h1>Minhas Tarefas</h1>

    <input type="text" id="novaTarefa" placeholder="Digite uma nova tarefa">
    <button id="btnAdicionar">Adicionar</button>

    <ul id="listaTarefas"></ul>

    <script>
        async function carregarTarefas() {
            const resposta = await fetch('../api/listar.php');
            const tarefas = await resposta.json();

            const lista = document.getElementById('listaTarefas');
            lista.innerHTML = '';

            tarefas.forEach(t => {
                const li = document.createElement('li');
                li.textContent = t.titulo;
                
                if (t.concluida == 1){
                    li.style.textDecoration = 'line-through';
                }

                const btnConcluir = document.createElement('button');
                btnConcluir.textContent = t.concluida == 1 ? 'Desfazer' : 'Concluir';
                btnConcluir.onclick = async () => {
                    await fetch("../api/atualizar.php", {
                        method: "POST",
                        body: JSON.stringify({
                            id: t.id,
                            concluida: t.concluida == 1 ? 0 : 1
                        })
                    });
                    carregarTarefas();
                };

                const btnEditar = document.createElement('button');
                btnEditar.textContent = 'Editar';
                btnEditar.onclick = async () => {

                    const novoTitulo = prompt("Editar tarefa:", t.titulo);
                    if (novoTitulo && novoTitulo.trim() !== "") {
                        await fetch("../api/editar.php", {
                            method: "POST",
                            body: JSON.stringify({
                                id: t.id,
                                titulo: novoTitulo
                            })
                        });
                        carregarTarefas();
                    }
                };

                const btnExcluir = document.createElement('button');
                btnExcluir.textContent = 'Excluir';
                btnExcluir.onclick = async () => {
                    await fetch("../api/excluir.php", {
                        method: "POST",
                        body: JSON.stringify({
                            id: t.id
                        })
                    });
                    carregarTarefas();
                };

                li.append(" ", btnConcluir, " ", btnEditar, " ", btnExcluir);
                lista.appendChild(li);
            });
        }

        document.getElementById('btnAdicionar').onclick = async () => {
            const titulo = document.getElementById('novaTarefa').value;
            if (titulo.trim() !== "") {
                await fetch("../api/adicionar.php", {
                    method: "POST",
                    body: JSON.stringify({
                        titulo
                    })
                });
                document.getElementById('novaTarefa').value = '';
                carregarTarefas();
            }

            document.getElementById('novaTarefa').value = '';
            carregarTarefas();
        };

        carregarTarefas();
    </script>
</body>

</html>