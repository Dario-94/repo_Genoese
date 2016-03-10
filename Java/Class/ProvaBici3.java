import java.util.Scanner;

public class ProvaBici3{
	public static void main (String[] args){
		Scanner tastiera = new Scanner(System.in);
		int velocita;
    	Bicicletta3 biciA;
    	Bicicletta3 biciB;
    	Bicicletta3 biciC;

    	biciA = new Bicicletta3("BMX", "Dario", 1, 1);
    	biciB = new Bicicletta3("MB", "Pippo", 1, 1);
    	biciC = new Bicicletta3("CCC", "Pluto", 1, 1);
    	
    	System.out.println("BiciA Speed:");
    	velocita = tastiera.nextInt();
        biciA.aumentaVelocita(velocita);
    	biciA.stampaStato();
    	System.out.println("BiciB Speed:");
    	velocita = tastiera.nextInt();
        biciB.aumentaVelocita(velocita);
    	biciB.stampaStato();
    	System.out.println("BiciC Speed:");
    	velocita = tastiera.nextInt();
        biciC.aumentaVelocita(velocita);
    	biciC.stampaStato();

        int totBici = Bicicletta3.contatore;	

    if (biciA.getVelocita() > biciB.getVelocita() && biciA.getVelocita() > biciC.getVelocita()) {
    	System.out.println(biciA.getVelocita());
    } else if (biciB.getVelocita() > biciA.getVelocita() && biciB.getVelocita() > biciC.getVelocita()) {
    	System.out.println(biciB.getVelocita());
    } else 	{
    	System.out.println(biciC.getVelocita());
    }
}
}