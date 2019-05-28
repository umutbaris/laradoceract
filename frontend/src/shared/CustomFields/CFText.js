import React from 'react';
import PropTypes from 'prop-types';

const CFText = (props) => {
  const { label, description } = props;
  return (
    <p>
      { label }
      :
      { description }
    </p>
  );
};

CFText.propTypes = {
  label: PropTypes.string.isRequired,
  description: PropTypes.string.isRequired
};

export default CFText;
