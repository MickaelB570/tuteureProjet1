<div class="text-center mt-5 mb-5">
  <?php 
  if(!isset($_SESSION["reussi"]))
  {
    $_SESSION["reussi"] = "non";
  }
 ?>

<!-- l'espace c'est la vie -->
  <!-- Replace "test" with your own sandbox Business account app client ID -->
  <script src="https://www.paypal.com/sdk/js?client-id=AaiaaPfB3ZY9gYAkpG1l1sqwiWHyLhczOuHLPmevpopx08EaeDyAc4qn5iRnamGmZgkmbY0BPFyJaC_w&currency=EUR"></script>
  <!-- Set up a container element for the button -->
  <div id="paypal-button-container" class="mt-5"></div>
  <script>
    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '<?= $_SESSION['prixTotal']; ?>' // Can also reference a variable or function
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          <?php $_SESSION["reussi"] = "oui"; ?>
          window.location.href = "?uc=gererPanier&action=paiementValider&tr=" + transaction.id;
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
        });
      }
    }).render('#paypal-button-container');
  </script>
</div>
  
