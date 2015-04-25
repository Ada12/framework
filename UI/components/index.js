define(['./Header', 
    './Navigation',
    './Cardflow',
    './CardPanel',
    './Pagination'], 
  function(Header, 
    Navigation, 
    Cardflow, 
    CardPanel, 
    Pagination) {
    return {
      Header: Header,
      Navigation: Navigation,
      Cardflow: Cardflow,
      CardPanel: CardPanel,
      Pagination: Pagination
    };
});