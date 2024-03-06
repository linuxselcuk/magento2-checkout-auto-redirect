- put the files into MAGENTOROOT/code/


The module contains the following items:
- Creates 3 fields in the admin block (block/field title, redirection to direct payment yes/no options and enabling/disabling the block).
- creates a block for the frontend Home page. The title of the block gets data from the store configuration options.
- Creates a function for the random product that receives relevant information block information through the Magento core product system (includes: name, price, image, button).
- The buy button receives the configuration data as defined on the admin page if the "yes" option is selected, then redirects to the checkout page without hitting the cart page. If the "no" option is selected, the default cms behaivour is triggered according to Magento's configuration.


![Redirect directly to checkout?](https://raw.githubusercontent.com/linuxselcuk/magento2-checkout-auto-redirect/main/f6888d43-5a73-4a42-bc85-c9c017d57988.png)

