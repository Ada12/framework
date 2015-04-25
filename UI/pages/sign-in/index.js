require('base');

require(['components', 'react', './SessionMain'], 
  function(components, React, SessionMain) {

  React.render(<SessionMain />,
    document.getElementById('J_sign-in'));

});