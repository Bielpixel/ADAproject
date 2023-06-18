<!DOCTYPE html>
<html lang="pt-br">
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>testFormulajdfdshafouih</title>
  <link rel="stylesheet" href="../css/styles.css">

  <style>
    section {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      min-width: 100vw;
      background: #111111;
      color: white;
    }

    #idForm {
      border: 2px solid lightblue;
      border-radius: 1em;
      padding: 1em;
      min-width: 80vw;
      min-height: 75vh;
    }
  </style>

</head>

<body>

  <section id="idSection" class="d-flex container-fluid p-4">
    <form action="" id="idForm">
      <h1>Formulário de Adoção</h1>
      <!-- Nome -->
      <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" id="idNome" name="nome" placeholder="Nome Completo" required="required">
      </div>
      <!-- Email -->
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" id="idEmail" name="email" placeholder="exemplodeemail@gmail.com"
          required="required">
      </div>
      <!-- Data de Nascimento -->
      <div class="form-group">
        <label for="datanasc">Data de Nascimento</label>
        <input type="date" class="form-control" id="idDataNasc" name="datanasc" placeholder="XX/XX/XXXX"
          required="required">
      </div>
      <!-- Estado -->
      <div class="form-group">
        <label for="estado">Estado</label>
        <br>
        <select class="form-control" id="estado" name="estado">
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
      </div>
      <!-- Cidade -->
      <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="idCidade" name="cidade" placeholder="Digite sua cidade"
          required="required">
      </div>
      <!-- CPF -->
      <div class="form-group">
        <label for="cidade">CPF (digite sem os pontos e hífen)</label>
        <input type="textnumber" class="form-control" id="idCidade" name="cpf" placeholder="XXX.XXX.XXX-XX"
          maxLength="11" required="required">
      </div>
      <br>
      <p> Agora algumas perguntas relacionadas a sua moradia</p>

      <input type="radio" id="Casa" name="fav_language" value="Casa">
      <label for="html">Casa</label><br>
      <input type="radio" id="Apartamento" name="fav_language" value="Apartamento">
      <label for="css">Apartamento</label><br>
      <input type="radio" id="Sítio" name="fav_language" value="Sítio">
      <label for="Sítio">Sítio</label>
      <br>
      <p> Sua residência possui quintal ?
      <p></p>
      <input type="radio" id="Sim" name="sim" value="Sim">
      <label for="html">Sim</label><br>
      <input type="radio" id="Não" name="nao" value="Não">
      <label for="css">Não</label><br>
      <br>
      <P>Sua residência possui espaço ?</P>
      <input type="radio" id="Sim, muito" name="muito" value="muito">
      <label for="html">Sim, muito</label><br>
      <input type="radio" id="pouco" name="pouco" value="Pouco">
      <label for="css">Sim, pouco</label><br>
      <input type="radio" id="Não" name="possuin" value="Não">
      <label for="css">Não possui</label><br>
      <br>
      <p> ATENÇÃO PREENCHA ESTE FORMULÁRIO DE FORMA CONSCIENTE, POIS COM ELE VOCÊ ADOTARÁ SEU MELHOR AMIGO</p>
    </form>
  </section>
</body>

</html>