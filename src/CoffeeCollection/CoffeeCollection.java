
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CoffeeCollection;

/**
 *
 * @author Codeklerk
 */
public class CoffeeCollection {

    public int Farmer;
    public int Bags;
    public int Days;

    public static void main(String args[]) {
        CoffeeCollection Collection = new CoffeeCollection(); // Collection is a new instance of class CoffeeCollection
        Collection.setFarmer(7); // set the number of farmers in the village
        Collection.setDays(1); // set the number of days after which farmers give bags
        Collection.setBags(2); // set the number of bags given by each farmer
        Collection.printFarmers();// set the number of bags given by each farmer
        Collection.giveBags(6, 8); // currently giving bags to farmer number 6 & find out who's turn it will be after 8 days

    }

    public void printFarmers() {
        // Iteration of all farmers printing their numbers
        int n = this.getFarmer();
        System.out.println("Farmers in the village ");
        while (n > 0) {

            System.out.print(n + ", ");
            n--;
        }

        System.out.println("\n ");

    }

    public void giveBags(int currentFarmer, int Days) {
// Function to give bags. Accepts parameter $CurrentFarmer who is the farmer receiving bags currently

        int t = this.getDays(); // $t is the loop for days after which they all give bags
        int b = this.getBags(); // $b is the number of bags each farmer gives after every t days
        int n = this.getFarmer(); // $n is the number of farmers in the village
        int previousFarmer;
        int nextFarmer = 0;

        if (currentFarmer > n) {
            System.err.println("Current Farmer Parameter out of range"); // constraint to check whether $currentFarmer is an existing farmer
        }
        
        if (currentFarmer > 1) {//value of previousFarmer. subracts 1 if CurrentFarmer is not 1
            previousFarmer = currentFarmer - 1;
        } else {previousFarmer = n;}

        if (currentFarmer > n) {//value of assign nextFarmer. adds 1 if CurrentFarmer is not $n(number of farmers)
            nextFarmer = currentFarmer + 1;
        } else {currentFarmer = 1;}
        System.out.println("Farmer receiving bags currently is  farmer number " + currentFarmer);
        System.out.println("Previous Farmer receiving bags was farmer number " + previousFarmer);
        System.out.println("Next Farmer receiving bags is  " + nextFarmer);
        
        int farmer = Days % n;
        if (farmer == 0) {
            farmer = n;
        }
        System.out.println(Days + " days from now, it will be Farmer number " + farmer + "'s turn to receive bags");

    }

    public int getFarmer() {
        return Farmer;
    }

    public void addFarmer() {
        int Farmer = (this.getFarmer()) + 1;
        this.setFarmer(Farmer);
    }

    public void removeFarmer() {
        int Farmer = (this.getFarmer()) - 1;
        this.setFarmer(Farmer);
    }

    public void setFarmer(int Farmer) {
        this.Farmer = Farmer;
    }

    public int getBags() {
        return Bags;
    }

    public void setBags(int Bags) {
        this.Bags = Bags;
    }

    public int getDays() {
        return Days;
    }

    public void setDays(int Days) {
        this.Days = Days;
    }

}
