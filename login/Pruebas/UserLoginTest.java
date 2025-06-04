import org.junit.jupiter.api.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import static org.junit.jupiter.api.Assertions.*;

public class UserLoginTest extends BaseTest {

    @Test
    public void testUserLogin() {
        // Navegar a la página de inicio de sesión
        driver.get("http://tusitio.com/login");

        // Encontrar los campos del formulario
        WebElement emailField = driver.findElement(By.name("email"));
        WebElement passwordField = driver.findElement(By.name("password"));
        WebElement loginButton = driver.findElement(By.name("login"));

        // Completar el formulario con las credenciales correctas
        emailField.sendKeys("usuario@prueba.com");
        passwordField.sendKeys("ContraseñaSegura123");

        // Hacer clic en el botón de inicio de sesión
        loginButton.click();

        // Verificar que la redirección sea la página de bienvenida
        WebElement welcomeMessage = driver.findElement(By.id("welcomeMessage"));
        assertNotNull(welcomeMessage);
        assertEquals("Bienvenido, usuario@prueba.com", welcomeMessage.getText());
    }
}