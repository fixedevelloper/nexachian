var lottery = function () {
    'use strict';
    const initialiseABI = function () {
        const contractAddress=""
        const abi=[]
        var balance_MAIN = "100000000000000000000000";
        const contract = new web3.eth.Contract(abi, contractAddress)
        return {
            'address':contractAddress,
            'abi':abi,
            'balance_MAIN':balance_MAIN,
            'contract':contract
        }
    };
    const getAccount= async function(){
        const accounts = await window.web3.eth.getAccounts();
        return accounts[0];
    };
    const initialiseEtheruim = async function () {
        if (window.ethereum) {
            window.web3 = new Web3(ethereum);
            try {
                /*await ethereum.request({
                    method: 'eth_requestAccounts'
                });*/
                var networkid = await web3.eth.net.getId()
                if (networkid !== 56) {
                    alert('Connect to BNB Mainnet Network');
                } else {
                    var id_user = $('#id_user_smart').text();
                }
        console.log(networkid)
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
    };
    const register=async function(){
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
    };
    const login=async function(){
        var account= await lottery.getAccount()
        console.log(account)
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
       // window.mxgfcontract.methods.idToAddress(Number.parseInt(1)).call();
    };
    const sendLottery=async function(){
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
    }
    return {
        init: function () {
            initialiseEtheruim();
            initialiseABI();
        },
        load: function () {
            initialiseEtheruim();
        },
        getAccount,
        register,
        login,
        sendLottery
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
