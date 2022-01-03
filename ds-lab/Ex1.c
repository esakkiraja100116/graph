#include <stdio.h>
#include <stdlib.h>


//Represent a node of singly linked list
struct node
{
    int data;
    struct node *next;
};

//Represent the head and tail of the singly linked list
struct node *head, *tail = NULL;

//addNode() will add a new node to the list
void addNode(int data)
{
    //Create a new node
    struct node *newNode = (struct node *)malloc(sizeof(struct node));
    newNode->data = data;
    newNode->next = NULL;

    //Checks if the list is empty
    if (head == NULL)
    {
        //If list is empty, both head and tail will point to new node
        head = newNode;
        tail = newNode;
    }
    else
    {
        //newNode will be added after tail such that tail's next will point to newNode
        tail->next = newNode;
        //newNode will become new tail of the list
        tail = newNode;
    }
}

//display() will display all the nodes present in the list
void display()
{
    //Node current will point to head
    struct node *current = head;

    if (head == NULL)
    {
        printf("\n");
        printf("Sorry your list is empty :( \n");
        return;
    }
    printf("\n");
    printf("Nodes of singly linked list: ------> ");
    while (current != NULL)
    {
        //Prints each node by incrementing pointer
        printf("%d", current->data);
        current = current->next;
    }
    
}

void len_node()
{
    struct node *n;
    int c = 0;
    n = head;
    while (n != NULL)
    {
        n = n->next;
        c++;
    }
     printf("\n");
    printf(" Size of the current node ---->    %d", c);
     printf("\n");
}

void del_node(int num)
{

    struct node *temp,
        *prev;
    temp = head;
    while (
        temp != NULL)
    {
        if (temp->data == num)
        {
            if (temp == head)
            {
                head = temp->next;
                free(temp);
                return ;
            }
            else
            {
                prev->next = temp->next;
                free(temp);
                return ;
            }
        }
        else
        {
            prev = temp;
            temp = temp->next;
        }
    }
    return ;
}

int main()
{
    while (1)
    {
        printf("\n");
        printf("NOTE : Select your choice to add,delete,display and display size of the node");
        printf("\n");
        printf("\n");

        printf("1.Enter a value to insert \n");
        printf("2.Display the node \n");
        printf("3.Delete the node \n");
        printf("4.total size of the node \n");
        //Add nodes to the list
        int val;
        printf("\n");
        printf("Enter your choice : --> ");
        
        scanf("%d", &val);

        //Displays the nodes present in the list

        // Insert into the node
        if (val == 1)
        {
            int insert;
            printf("\n");
            printf("Enter the value to insert:");
             
            scanf("%d", &insert);
            addNode(insert);
        }

        if (val == 2)
        {
            display();
        }

        if (val == 4)
        {
            len_node();
        }

        if (val == 3){
            int del;
            printf("Enter the inserted value to delete : ");
            scanf("%d",&del);
            del_node(del);
        }
    }
    return 0;
}