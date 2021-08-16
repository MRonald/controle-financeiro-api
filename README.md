# controle-financeiro-api

Uma API feita com PHP e Laravel para gerenciamento de dados de controle financeiro de usuários cadastrados (deploy na heroku).

## Endpoints da API

URL base para busca dos usuários:
>[https://mr-finance-control-api.herokuapp.com/api/v1/users](https://mr-finance-control-api.herokuapp.com/api/v1/users)

Busca de usuários por ID:
>[https://mr-finance-control-api.herokuapp.com/api/v1/users/1](https://mr-finance-control-api.herokuapp.com/api/v1/users/1)

URL para lista de todas as transações cadastradas:
>[https://mr-finance-control-api.herokuapp.com/api/v1/transactions](https://mr-finance-control-api.herokuapp.com/api/v1/transactions)

Busca de transações por ID:
>[https://mr-finance-control-api.herokuapp.com/api/v1/transactions/1](https://mr-finance-control-api.herokuapp.com/api/v1/transactions/1)

Busca das transações de um usuário específico:
>[https://mr-finance-control-api.herokuapp.com/api/v1/users/2/transactions](https://mr-finance-control-api.herokuapp.com/api/v1/users/2/transactions)

Essa busca trás todas as transações cadastradas para o usuário com id 2.

## Manipulação de dados

### Adicionando usuários

Faça um POST para o seguinte endpoint:
>[https://mr-finance-control-api.herokuapp.com/api/v1/users](https://mr-finance-control-api.herokuapp.com/api/v1/users)

Modelo de body:
```
{
    "name": "Henrique",
    "email": "henrique@email.com",
    "username": "rique",
    "password": "12345678"
}
```

Modelo de resposta (criado com sucesso):
```
{
    "status": 201,
    "message": "Created successfully"
}
```

### Atualizando usuários

Faça um PUT para o seguinte endpoint:
>[https://mr-finance-control-api.herokuapp.com/api/v1/users/2](https://mr-finance-control-api.herokuapp.com/api/v1/users/2)

Modelo de body:
```
{
    "name": "Henrique Goes",
    "email": "henrique_goes@email.com",
    "username": "rique_goes",
    "password": "87654321"
}
```

Modelo de resposta (atualizado com sucesso):
```
{
    "status": 202,
    "message": "Updated successfully"
}
```

*No caso de uma atualização é necessário passar o ID do usuário que vai ser modificado pela URL. Também é necessário repetir os dados que não serão alterados.

### Apagando usuários

Faça um DELETE para o endpoint:
>https://mr-finance-control-api.herokuapp.com/api/v1/users/{ID}

Modelo de resposta (deletado com sucesso):
```
{
    "status": 202,
    "message": "Deleted successfully"
}
```

*No lugar de {ID} insira o ID do usuário que deseja apagar.

### Adicionando transações

Faça um POST para o seguinte endpoint:
>[https://mr-finance-control-api.herokuapp.com/api/v1/transactions](https://mr-finance-control-api.herokuapp.com/api/v1/transactions)

Modelo de body:
```
{
    "user_id": 2,
    "type": "compra",
    "product": "Pastel",
    "value": 2.50
}
```

Modelo de resposta (criado com sucesso):
```
{
    "status": 201,
    "message": "Created successfully"
}
```

### Atualizando transações

Faça um PUT para o seguinte endpoint:
>[https://mr-finance-control-api.herokuapp.com/api/v1/transactions/2](https://mr-finance-control-api.herokuapp.com/api/v1/transactions/2)

Modelo de body:
```
{
    "type": "venda",
    "product": "Pastel",
    "value": 3.25
}
```

Modelo de resposta (atualizado com sucesso):
```
{
    "status": 202,
    "message": "Updated successfully"
}
```

*No caso de uma atualização é necessário passar o ID da transação que vai ser modificada pela URL. Também é necessário repetir os dados que não serão alterados.

*Depois de cadastrada uma transação não é possível alterar a qual usuário ela pertence, portanto, no body de atualização, não passamos o user_id.

### Apagando transações

Faça um DELETE para o endpoint:
>https://mr-finance-control-api.herokuapp.com/api/v1/transactions/{ID}

Modelo de resposta (deletado com sucesso):
```
{
    "status": 202,
    "message": "Deleted successfully"
}
```

*No lugar de {ID} insira o ID da transação que deseja apagar.
