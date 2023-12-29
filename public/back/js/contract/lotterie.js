var lottery = function () {
    'use strict';
    var initialiseABI = function () {

    }
    var initialiseEtheruim = async function () {

        if (window.ethereum) {
            window.web3 = new Web3(ethereum);
            try {
                var networkid = await web3.eth.net.getId()
                if (networkid !== 56) {
                    alert('Connect to BNB Mainnet Network');
                } else {
                    var id_user = $('#id_user_smart').text();
                }
            } catch (error) {
                $('#spinner_dashboard').hide()
                alert('Error: Out of Gas: please reload this page')
                console.log(error)
            }
        } else if (window.web3) {
            window.web3 = new Web3(web3.currentProvider);
            web3.eth.sendTransaction({/* ... */});
        } else {
            alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');

        }
    }
    return {
        init: function () {
            initialiseEtheruim();
            initialiseABI();
        },
        load: function () {
            initialiseEtheruim();
        }
    }
}();

jQuery(document).ready(function() {
    'use strict';
    lottery.init();


});
jQuery(window).on('load',function () {
    'use strict';
    lottery.load();

});
