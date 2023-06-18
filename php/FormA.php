<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/style2.css">
<a href="../index.php " id="logo"><img src="../assets/img/logo.png" alt=""></a>

<div class="wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#F5E840" fill-opacity="1"
        d="M0,224L60,208C120,192,240,160,360,165.3C480,171,600,213,720,234.7C840,256,960,256,1080,245.3C1200,235,1320,213,1380,202.7L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
      </path>
    </svg>
  </div>


<title>Adoção</title>

</button>

<form>
  <h2>Formulário</h2>

  <label for="nome_completo">Nome Completo:</label>
  <input type="text" id="nome_completo" name="nome_completo" required>

  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required>

  <label for="data_nascimento">Data de Nascimento:</label>
  <input type="date" id="data_nascimento" name="data_nascimento" required>

  <br>

  <label for="estado">Estado:</label>

  <select id="estado" name="estado" required>
    <option value="">Selecione seu Estado</option>

    <option value="ac">Acre</option>
    <option value="al">Alagoas</option>
    <option value="ap">Amapá</option>
    <option value="am">Amazonas</option>
    <option value="ba">Bahia</option>
    <option value="ce">Ceará</option>
    <option value="df">Distrito Federal</option>
    <option value="es">Espírito Santo</option>
    <option value="go">Goiás</option>
    <option value="ma">Maranhão</option>
    <option value="mt">Mato Grosso</option>
    <option value="ms">Mato Grosso do Sul</option>
    <option value="mg">Minas Gerais</option>
    <option value="pa">Pará</option>
    <option value="pb">Paraíba</option>
    <option value="pr">Paraná</option>
    <option value="pe">Pernambuco</option>
    <option value="pi">Piauí</option>
    <option value="rj">Rio de Janeiro</option>
    <option value="rn">Rio Grande do Norte</option>
    <option value="rs">Rio Grande do Sul</option>
    <option value="ro">Rondônia</option>
    <option value="rr">Roraima</option>
    <option value="sc">Santa Catarina</option>
    <option value="sp">São Paulo</option>
    <option value="se">Sergipe</option>
    <option value="to">Tocantins</option>
  </select>
  <br>
  <br>
  <label for="cidade">Cidade:</label>
  <input type="text" id="cidade" name="cidade" required>

  <label for="cpf">CPF:</label>
  <input type="number" id="cpf" name="cpf" required minlength="11" maxlength="11">

  <h3>Agora responda algumas perguntas sobre sua residência</h3>


  <label for="tipo_moradia">Qual o tipo da sua residência ?</label> <br>
  <select id="tipo_moradia" name="tipo_moradia" required>
    <option value="">Selecione o Tipo da residência</option>
    <option value="casa">Casa</option>
    <option value="apartamento">Apartamento</option>
    <option value="sitio">Sítio</option>
  </select>

  <br>
  <br>
  <label for="possui-quintal">Possui quintal ?</label><br>
  <input type="radio" id="quintal-sim" name="possui-quintal" value="sim">
  <label for="quintal-sim">Sim</label><br>
  <input type="radio" id="quintal-nao" name="possui-quintal" value="nao">
  <label for="quintal-nao">Não</label><br><br>

  <label for="moradia-espacosa">Sua residência é espaçosa?</label><br>
  <input type="radio" id="espacosa-sim" name="moradia-espacosa" value="sim">
  <label for="espacosa-sim">Sim, muito</label><br>
  <input type="radio" id="espacosa-mais-ou-menos" name="moradia-espacosa" value="mais-ou-menos">
  <label for="espacosa-mais-ou-menos">Mais ou menos</label><br>
  <input type="radio" id="espacosa-nao" name="moradia-espacosa" value="nao">
  <label for="espacosa-nao">Não é espaçosa</label><br><br>

  <label for="trabalha">Você trabalha ?</label><br>
  <input type="radio" id="trabalha-sim" name="trabalha" value="sim">
  <label for="trabalha-sim">Sim</label><br>
  <input type="radio" id="trabalha-nao" name="trabalha" value="nao">
  <label for="trabalha-nao">Não</label><br><br>

  <label for="tempo-fora-casa">Se sim, quanto tempo você fica fora de casa ?</label><br>
  <select id="tempo-fora-casa" name="tempo-fora-casa">
    <option value="dia-todo">O dia todo</option>
    <option value="meio-periodo">Meio período</option>
    <option value="noite-toda">A noite toda</option>
    <option value="home-office">Trabalho Home Office</option>
    <option value="Nenhuma">Nenhuma das opções </option>
  </select><br><br>

  <label for="condicao-financeira">Qual sua condição financeira ?</label><br>
  <select id="condicao-financeira" name="condicao-financeira">
    <option value="menos-de-1000">Menos que 1.000,00</option>
    <option value="acima-de-1000">Acima de 1.000,00</option>
    <option value="acima-de-2000">Acima de 2.000,00</option>
    <option value="acima-de-3000">Acima de 3.000,00 ou mais</option>
  </select><br><br>

  <label for="experiencia-animais">Possui experiência com animais ?</label><br>
  <input type="radio" id="experiencia-gato" name="experiencia-animais" value="gato">
  <label for="experiencia-gato">Sim, com gato</label><br>
  <input type="radio" id="experiencia-cachorro" name="experiencia-animais" value="cachorro">
  <label for="experiencia-cachorro">Sim, com cachorro</label><br>
  <input type="radio" id="nao-possui" name="experiencia-animais" value="nao">
  <label for="nao-possui">Não possuo experiencia</label>

  <input type="submit" value="Enviar Formulário">
  <p>PREENCHA DE FORMA COERENTE, POIS COM ESTE FORMULÁRIO VOCÊ ADOTARÁ SEU AMIGUINHO(A)</p>
</form>