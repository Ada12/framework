require('base');

require(['components', 'react'], function(components, React) {
  require('./index.less');

  React.render(<components.MainPage user={window.iu.user}/>, document.getElementById('J_index'));

});