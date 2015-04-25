require('base');

require(['react', './MainPage'], function(React, MainPage) {
  require('./index.less');

  React.render(<MainPage user={window.iu.user}/>, 
    document.getElementById('J_index'));

});