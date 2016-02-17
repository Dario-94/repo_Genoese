import java.util.Scanner;

public class Esercizio11{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Ciclo for");

		int a = tastiera.nextInt();
		int f = 1;

			for (int i=a; i>0; i--) {
				f = f*i;
			}
			System.out.println("Fattoriale"+a+"è:"+f);
		}
	}