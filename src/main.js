const cardapio = [
  {titulo: 'CHOPP', items: ['Chopp Heineken', 'Caneca Chopp Heineken', 'Chopp Amstel', 'Caneca Chopp Amstel', 'Chopp Eisenbahn', 'Caneca Chopp Eisenbahn', 'Chopp Escuro', 'Caneca Chopp Escuro']},
  {titulo: 'CERVEJAS 600ml', items: ['Heineken', 'Amstel', 'Eisenbahn', 'Devassa']},
  {titulo: 'CERVEJAS ESPECIAIS', items: ['Baden Baden Crystal', 'Baden Baden Red Ale', 'Baden Baden Golden']},
  {titulo: 'LONG-NECK', items: ['Heineken', 'Sol', 'Eisenbahn Pilsen', 'Devassa', 'Cerveja sem álcool']},
  {titulo: 'REFRIGERANTES / ÁGUA', items: ['Água com gás', 'Água sem gás', 'Coca Cola lata', 'Tônica Shueppes /Citrus', 'Matte Leão', 'Suco Del Valle (lata)', 'Energético Red Bull', 'Energético Monster']},
  {titulo: 'SUCOS', items: ['Laranja', 'Limão', 'Frutas Vermelahs', 'Laranja com acerola', 'Maracujá', 'Abacaxi', 'Jarra de suco', 'Jarra de suco 2 frutas']},
  {titulo: 'DRINKS', items: ['Caipirinha', 'Caipiroska nacional', 'Caipiroska importada', 'Saquerita', 'Lagoa Azul', 'Sexy on the beach', 'Le Bou', 'Coquetel de frutas sem álcool', 'Coquetel de frutas com álcool', 'Marguerita', 'Submarino', 'Gin Orange', 'Gin Lemon', 'Aperol Spritz', 'Cozumel']},
  {titulo: 'DOSES', items: ['Campari', 'Steinhager nacional', 'Steinhager importado', 'Tequila José Cuervo', 'Red Label', 'Black Label', 'White Orange', 'Vodka Nacional', 'Vodka Absolut']},
  {titulo: 'CLUBE DO WHISKY / DESTILADOS', items: ['Vodka Smirnoff', 'Vodka Absolut', 'Red Label', 'Black Label', 'Tequila José Cuervo']},
  {titulo: 'PORÇÕES FRIAS', items: ['Salaminho', 'Provolone', 'Ovos de codorna']},
  {titulo: 'ESPETINHOS', items: ['Espeto de carne bovina', 'Espeto de frango', 'Espeto misto (carne / linguiça)', 'Espeto de Kafta']},
  {titulo: 'PORÇÕES QUENTES / PETISCOS', items: ['Batata frita com queijo ou cheddar e bacon', 'Batata frita simples', 'Frango a passarinho', 'Pão de alho', 'Linguiça Calabresa', 'Linguiça Artesanal', 'Pizza Brotinho', 'Filet mignon ao molho gorgonzola', 'Filet mignon ao molho catupiry', 'Filet mignon acebolado', 'Escondidinho de Camarão', 'Escondidinho de Carne Seca', 'Casquinha de Siri']},
  {titulo: 'GRANDES PORÇÕES', items: ['Contra filet acebolado c/ fritas', 'Costelinha com molho barbecue',  'Coxinha de asa de frango']},
  {titulo: 'SANDUICHES', items: ['Carne e queijo especial', 'Frango c/ queijo', 'Especial do Chef']},
  {titulo: 'SOBREMESAS', items: ['Torta holandesa', 'Petit Gateau']}
]

const app = new Vue({
  el: "#cardapio-container",

  data: function() {
    return {
      selected: '',
      escolha: ''
    }
  },

  updated: function() {
    this.escolha = cardapio[this.selected]
  }

})