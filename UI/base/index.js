/**
 * Require base CSS
 */

define(['components', 'react'], function(components, React) {
  require('./index.less');
  
  React.render(<components.Header />, document.getElementById('J_header'));
});
