/**
 * 翻页
 * 
 * @module Pagination
 */


define(['react'], function(React) {
  // Require stylesheet
  require('./index.less');

  // React component
  class Pagination extends React.Component {
    render() {
      return (
        <div className="pagination">
        <nav>
          <ul className="pagination-row">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a className="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>
      );
    }
  }

  return Pagination;
});