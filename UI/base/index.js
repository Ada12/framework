/**
 * Require base CSS
 */

define(['components', 'react'], function(components, React) {
  require('./index.less');
  
  require('./modules/ajaxSetup');

  React.render(<components.Header user={window.iu.user}/>, document.getElementById('J_header'));
});
