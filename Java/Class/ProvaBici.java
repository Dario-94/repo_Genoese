import java.util.Scanner;

public class ProvaBici{
	public static void main (String[] args){
		Scanner tastiera = new Scanner(System.in);
		int velocita;
    	Bicicletta biciA;
    	Bicicletta biciB;
    	Bicicletta biciC;

    	biciA = new Bicicletta("BMX", "Dario", 1, 1);
    	biciB = new Bicicletta("MB", "Pippo", 1, 1);
    	biciC = new Bicicletta("CCC", "Pluto", 1, 1);
    	
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

    if (biciA.getVelocita() > biciB.getVelocita() && biciA.getVelocita() > biciC.getVelocita()) {
    	System.out.println(biciA.getVelocita());
    } else if (biciB.getVelocita() > biciA.getVelocita() && biciB.getVelocita() > biciC.getVelocita()) {
    	System.out.println(biciB.getVelocita());
    } else 	{
    	System.out.println(biciC.getVelocita());
    }
}
}