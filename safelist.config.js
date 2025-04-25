// safelist.config.js

const colorNames = [
  'light',
  'dark',
  'primary',
  'secondary',
  'info',
  'success',
  'warning',
  'error'
];

const createColorSafelist = () => {
  const variants = [
    'bg',
    'text',
    'border',
    'fill',
    'stroke',
    'ring',
    'divide'
  ];

  const states = [
    '',
    'hover:',
    'focus:',
    'active:',
    'disabled:',
    'group-hover:'
  ];

  const safelist = [];

  colorNames.forEach(baseColor => {
    if (baseColor !== 'light' && baseColor !== 'dark') {
      ['light', 'DEFAULT', 'dark'].forEach(shade => {
        variants.forEach(variant => {
          states.forEach(state => {
            if (shade === 'DEFAULT') {
              safelist.push(`${state}${variant}-${baseColor}`);
            } else {
              safelist.push(`${state}${variant}-${baseColor}-${shade}`);
            }
          });
        });
      });
    } else {
      variants.forEach(variant => {
        states.forEach(state => {
          safelist.push(`${state}${variant}-${baseColor}`);
        });
      });
    }
  });

  return safelist;
};

const createGridSafelist = () => {
  const safelist = [];

  // Grid columns (1-12)
  for (let i = 1; i <= 12; i++) {
    // grid-cols-{n}
    safelist.push(`grid-cols-${i}`);

    // Responsive grid-cols
    ['sm', 'md', 'lg', 'xl', '2xl'].forEach(screen => {
      safelist.push(`${screen}:grid-cols-${i}`);
    });
  }

  // Col span (1-12)
  for (let i = 1; i <= 12; i++) {
    // col-span-{n}
    safelist.push(`col-span-${i}`);

    // Responsive col-span
    ['sm', 'md', 'lg', 'xl', '2xl'].forEach(screen => {
      safelist.push(`${screen}:col-span-${i}`);
    });
  }

  // Specielle col-span værdier
  ['col-span-full', 'col-auto'].forEach(special => {
    safelist.push(special);
    ['sm', 'md', 'lg', 'xl', '2xl'].forEach(screen => {
      safelist.push(`${screen}:${special}`);
    });
  });

  // Col start/end (1-13)
  for (let i = 1; i <= 13; i++) {
    ['col-start', 'col-end'].forEach(prop => {
      safelist.push(`${prop}-${i}`);
      ['sm', 'md', 'lg', 'xl', '2xl'].forEach(screen => {
        safelist.push(`${screen}:${prop}-${i}`);
      });
    });
  }

  // Specielle col start/end værdier
  ['col-start-auto', 'col-end-auto'].forEach(special => {
    safelist.push(special);
    ['sm', 'md', 'lg', 'xl', '2xl'].forEach(screen => {
      safelist.push(`${screen}:${special}`);
    });
  });

  return safelist;
};

// Kombiner alle safelist arrays
const safelist = [
  ...createColorSafelist(),
  ...createGridSafelist()
];

module.exports = {
  safelist: [...new Set(safelist)] // Fjern eventuelle duplikater
};
