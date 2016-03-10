public class AnagrafeCani{
	private String nomeCane;
	private int etaCane;
	private String sesso;
	private int chip;
	private static int contatore = 0;

	public AnagrafeCani(
		String nC,
		int eC,
		String s
		){
		this.nomeCane = nC;
		this.etaCane = eC;
		this.sesso = s;
	}

	public String getDogName(){
    	return nomeCane;
    }

    public void setDogName(String name) {
        this.nomeCane = name;
    }

    public int getDogAge(){
    	return etaCane;
    }

    public void setDogAge(int age) {
        this.etaCane = age;
    }

    public String getSex(){
    	return sesso;
    }

     public void setSex(String sex) {
        this.sesso = sex;
    }

    public int getChip(){
        return chip;
    }
    
    public static int getContatore(){
    	return contatore;
    }
}