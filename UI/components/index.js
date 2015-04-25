define(['./Header', 
    './Navigation',
    './Cardflow',
    './CardPanel',
    './Pagination',
    './MainPage'], 
  function(Header, Navigation, Cardflow, CardPanel, Pagination, MainPage) {
    return {
      Header: Header,
      Navigation: Navigation,
      Cardflow: Cardflow,
      CardPanel: CardPanel,
      Pagination: Pagination,
      MainPage: MainPage
    };
});